<?php

// A basic class used to manage our story. Currently only retrieves data

class Story
{
	private $story_id = 0;

	public function __construct( $story_id ) {
		$this->story_id = (int)$story_id;
	}

	public function getAllNodes() {
		global $DB;

		$tRes		= $DB->query( "SELECT * FROM tree_nodes WHERE story_id = " . $this->story_id );

		while( $tRow = $tRes->fetch_object() ) {

			// stupid queries return int's as strings, so clean it up and make them actual ints:
			$tRow->id					= (int)$tRow->id;
			$tRow->story_id				= (int)$tRow->story_id;
			$tRow->starting_node		= (int)$tRow->starting_node;
			$tRow->ending_node			= false;

			// add an array to store decision options
			$tRow->decisions			= $this->getParentNodeDecisions( $tRow->id );

			// If there are no more available decisions, this must be the end.
			$tRow->ending_node			= count($tRow->decisions) ? false : true;

			$TREE_NODES[ $tRow->id ]	= $tRow;

		}
		$tRes->close();

		return $TREE_NODES;
	}

	public function getNode( $node_id ) {
		global $DB;

		$tRes		= $DB->query( "SELECT * FROM tree_nodes WHERE story_id = " . $this->story_id . " AND id = " . (int)$node_id );

		if( $tRow = $tRes->fetch_object() ) {

			// stupid queries return int's as strings, so clean it up and make them actual ints:
			$tRow->id					= (int)$tRow->id;
			$tRow->story_id				= (int)$tRow->story_id;
			$tRow->starting_node		= (int)$tRow->starting_node;
			
			// Grab decisions associated with this parent node
			$tRow->decisions			= $this->getParentNodeDecisions( $tRow->id );

			// If there are no more available decisions, this must be the end.
			$tRow->ending_node			= count($tRow->decisions) ? false : true; 

			$TREE_NODES[ $tRow->id ]	= $tRow;

		}
		$tRes->close();

		return $tRow;
	}

	public function getParentNodeDecisions( $node_id ) {
		global $DB;

		$DECISIONS	= array();

		$dRes		= $DB->query( "SELECT * FROM decisions WHERE node_id = " . (int)$node_id );
		while( $dRow = $dRes->fetch_object() ) {

			// stupid queries return int's as strings, so clean it up and make them actual ints:
			$dRow->id					= (int)$dRow->id;
			$dRow->node_id				= (int)$dRow->node_id;
			$dRow->destination_node_id	= (int)$dRow->destination_node_id;

			$DECISIONS[ $dRow->id ] = $dRow;
		}
		$dRes->close();

		return $DECISIONS;
	}

}

?>

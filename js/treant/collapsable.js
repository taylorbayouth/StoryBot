    var chart_config = {
        chart: {
            container: "#collapsable-example",
            animateOnInit: true,
            connectors: {
                type: "step",
                style: {
                    "stroke-width": 2,
                    "stroke": "#F26267"
                }
            },        
            node: {
                collapsable: true,
                drawLineThrough: false
            },
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            }
        },
        nodeStructure: {
            innerHTML: '<img src="svgs/3_chip.svg" class="svg-wrap">',
            children: [
                {
                    id: 1,
                    innerHTML: '<img src="svgs/3_chip.svg" class="svg-wrap">',
                    collapsed: true,
                    children: [
                        {
                            innerHTML: '<img src="svgs/3_chip.svg" height="62" class="svg-wrap">'
                        }
                    ]
                },
                {
                    id: 2,
                    innerHTML: '<img src="svgs/con_chip.svg" height="62" class="svg-wrap">',
                    childrenDropLevel: 1,
                    children: [
                        {
                            innerHTML: '<img src="svgs/2_chip.svg" height="62" class="svg-wrap">'
                        }
                    ]
                },
                {
                    id: 3,
                    pseudo: true,
                    children: [
                        {
                            innerHTML: '<img src="svgs/con_chip.svg" height="62" class="svg-wrap">'
                        },
                        {
                            innerHTML: '<img src="svgs/end_chip.svg" height="62" class="svg-wrap">'
                        }
                    ]
                }
            ]
        }
    };
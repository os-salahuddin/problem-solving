<?php
class Graph
{
    private $adjacencyList;

    public function __construct()
    {
        $this->adjacencyList = [];
    }

    public function addVertex($vertex)
    {
        $this->adjacencyList[$vertex] = [];
    }

    public function addEdges($startVertex, $endVertex)
    {
        $this->adjacencyList[$startVertex][] = $endVertex;
    }

    public function actionDfs($startVertex, &$visited)
    {
        $visited[$startVertex] = true;

        echo $startVertex;

        foreach ($this->adjacencyList[$startVertex] as $adjacentVertex) {
            if(!isset($visited[$adjacentVertex])) {
                $this->actionDfs($adjacentVertex, $visited);
            }
        }
    }
}


$graph = new Graph();
$graph->addVertex('A');
$graph->addVertex('B');
$graph->addVertex('C');
$graph->addVertex('D');
$graph->addVertex('E');


$graph->addEdges('A', 'B');
$graph->addEdges('A', 'C');
$graph->addEdges('B', 'D');
$visited = [];
print_r($graph->actionDfs('A', $visited));


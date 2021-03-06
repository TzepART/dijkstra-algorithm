<?php
declare(strict_types=1);

namespace Dijkstra;

class ConstantMessage
{
    public const CAN_NOT_SOLVE_WITHOUT_BEGIN_OR_END_ERROR = 'Cannot solve the algorithm without both starting and ending nodes';
    public const CAN_NOT_CALCULATE_DISTANCE_ERROR = 'Cannot calculate the distance of a non-solved algorithm:\nDid you forget to call ->solve()?';
    public const UNABLE_FIND_IN_GRAPH_ERROR = 'Unable to find %d in the Graph';
    public const UNABLE_INSERT_MULTIPLE_NODES_ERROR = 'Unable to insert multiple Nodes with the same ID in a Graph';
}

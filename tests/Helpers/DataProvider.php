<?php

namespace Versicode\Algorithms\Tests\Helpers;

class DataProvider
{
    public static function sortingAlgorithmProvider()
    {
        return [
            'positiveNumbers' => [
                [1, 2, 3, 5, 6], [3, 5, 6, 2, 1]
            ],
            'positiveWithNegativeNumbers' => [
                [-4, 1, 5, 8, 9], [8, 5, 1, -4, 9]
            ]
        ];
    }

    public static function findMinProvider()
    {
        return [
            'firstElementSmallest' => [
                [2, 8, 5, 19], 0
            ],
            'middleElementSmallest' => [
                [9, 8, 5, 19], 2
            ],
            'lastElementSmallest' => [
                [6, 8, 5, 2], 3
            ]
        ];
    }

    public static function findMaxValueProvider()
    {
        return [
            'firstElementBiggest' => [
                [8, 3, 6, 5, 4], 8
            ],
            'middleElementBiggest' => [
                [3, 7, 8, 5, 4], 8 
            ],
            'lastElementBiggest' => [
                [6, 3, 5, 4, 8], 8
            ]
        ];
    }
}

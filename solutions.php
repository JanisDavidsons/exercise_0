<?php

echo findOddEvenPair([3, 2, 5, 7, 5, 9, 12, 14]) . PHP_EOL;

function findOddEvenPair(array $numbers): int
{
    $validParityIndex = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if (($numbers[$i] % 2 == 0 && $numbers[$i + 1] % 2 !== 0) ||
            $numbers[$i] % 2 !== 0 && $numbers[$i + 1] % 2 == 0) {
            $validParityIndex = $i;
            return $validParityIndex;
        }
    }
    return $validParityIndex;
}

class SummationService
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result += $this->data[$i];
        }
        return $result;
    }
}

$service = new SummationService([-1, 0, 2, 7, -15]);
echo $service->sum(2, 4) . PHP_EOL;

function longestSubstr(string $text): string
{
    $chars = str_split($text);
    $result = [];
    foreach ($chars as $char) {
        if (array_search($char, $result)) {
            break;
        }
        $result[] = $char;
    }
    return implode('',$result);
}
echo longestSubstr('aZAzaz');

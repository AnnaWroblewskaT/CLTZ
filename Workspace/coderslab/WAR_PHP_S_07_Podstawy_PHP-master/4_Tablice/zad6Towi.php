function a($b)
{
	$c = [];
	$d = 0;
	for ($i = 0; $i < $b; $i++) {
		$c[$i] = [];
		for ($j = 0; $j < $b; $j++) {
			$c[$i][$j] = $d++;
		}
	}
	return $c;
}
var_dump(a(4));

function a($b)
{
	$c = [];
	$d = 0;
	for ($i = 0; $i < $b; $i++) {
		$c[] = [];
		for ($j = 0; $j < $b; $j++) {
			$c[$i][] = $d++;
		}
	}
	return $c;
}
var_dump(a(4));

<?

function s($value)
{
    return strip_tags($value);
}

function e($value)
{
	if($value instanceof Htmlable){
		return $value->toHtml();
	}
	return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
}

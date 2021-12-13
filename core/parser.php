<?php
// Parser
class Parser {
	private $url = "";
	private $html = "";
	private $wrap = "";
	private $content = "";

	// Getting site content
	public function get_url($url) {
		$this->url = $url;
		$this->html = file_get_contents($this->url);
		return $this->html;
	}

	// Getting content wrapper
	public function get_wrap($reg, $html=NULL) {
		if($html == NULL) preg_match_all("#$reg#su", $this->html, $result, PREG_PATTERN_ORDER);
		else preg_match_all("#$reg#su", $html, $result, PREG_PATTERN_ORDER);

		$this->wrap = $result[0][0];
		return $this->wrap;
	}

	// Getting content from the wrapper
	public function get_content($reg, $wrap=NULL) {
		if($wrap == NULL) preg_match_all("#$reg#su", $this->wrap, $result, PREG_PATTERN_ORDER);
		else preg_match_all("#$reg#su", $wrap, $result, PREG_PATTERN_ORDER);

		$res = [];
		foreach($result[0] as $key => $val) {
			preg_match_all("#<.*?>.*?</.*?>#su", $val, $tags, PREG_PATTERN_ORDER);
			foreach($tags[0] as $value)
				$res[$key][] = trim(strip_tags($value));
		}

		$this->content = $res;
		return $res;
	}

	public function get_tag() {

	}

	public function get_link() {

	}

}
?>
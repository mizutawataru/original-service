<?php
trait Thinkable {
    public function think() {
        print "私は" . $this->hobby . "について考えます。" . PHP_EOL;
    }
}
?>
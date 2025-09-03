<?php

trait Shareable {
    public function share($item) {
        return "Sharing $item.\n";
    }
}

class Post {
    use Shareable;
}

$p = new Post();
echo $p->share("photo");

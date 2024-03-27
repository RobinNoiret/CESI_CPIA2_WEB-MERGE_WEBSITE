<?php
    class Controller {
        private string $sourcePath;

        // Set sourcePath attribut
        function __construct($source) {
            $this->sourcePath = $source;
        }
    }
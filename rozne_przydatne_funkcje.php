<?php

function include_if_exists($filename) {
  if (file_exists($filename)) {
    require $filename;
  }
}

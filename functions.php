<?php
function dd($data)
{
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
  die();
}

function urlIs($url)
{
  $Uri = parse_url($_SERVER['REQUEST_URI'])['path'];
  echo  $Uri === $url ? ' active' : '';
};

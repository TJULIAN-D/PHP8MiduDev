<?php

function render_template($template, $data = [])
{
  require "templates/$template.php";
}


function get_data(string $url)
{

  $result = file_get_contents($url);

  $data = json_decode($result, true);

  return $data;
}

function get_until_message(int $days): string
{

  return match (true) {
    $days === 0 => "Hoy se estrena",
    $days === 1 => "Mañana se Estrena",
    $days < 7 => "Esta semana se Estrena",
    $days < 30 => "este mes se estrena",
    default => "$days Dias hasta el estreno",
  };
};

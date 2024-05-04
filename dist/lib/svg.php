<?php

function customSvgColor($file_tmp, $color): void {
  $svgContent = file_get_contents($file_tmp);
  $svgColor = '#6916ff';
  $svgContent = file_get_contents($file_tmp);
  $svgContent = preg_replace('/fill="#[0-9a-fA-F]{6}"/', 'fill="' . $color . '"', $svgContent);
  file_put_contents($file_tmp, $svgContent);
}
<?php

namespace Drupal\functioncreator;

use Twig\Extension\ExtensionInterface;
use Twig\TwigFunction;

class TwigFunctions implements ExtensionInterface {
  public function getFunctions() {
    return [
      new TwigFunction('id_to_image', [$this, 'tagIDToImage']),
      new TwigFunction('url_decoder', [$this, 'urlDecoder']),
    ];
  }

  public function tagIDToImage($id) {
    $file = \Drupal\file\Entity\File::load($id);
    $image_uri = $file->getFileUri();
    return $image_uri;
  }

  public function urlDecoder($text) {
    $decoded_text = urldecode($text);
    return $decoded_text;
  }

  public function getTokenParsers() {
    return [];
  }

  public function getNodeVisitors() {
    return [];
  }

  public function getFilters() {
    return [];
  }

  public function getTests() {
    return [];
  }

  public function getOperators() {
    return [];
  }
}

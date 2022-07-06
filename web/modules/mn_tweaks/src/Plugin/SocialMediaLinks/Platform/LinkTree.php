<?php

namespace Drupal\mn_tweaks\Plugin\SocialMediaLinks\Platform;

use Drupal\social_media_links\PlatformBase;

/**
 * Provides 'linktree' platform.
 *
 * @Platform(
 *   id = "linktree",
 *   name = @Translation("LinkTree"),
 *   urlPrefix = "https://linktr.ee/",
 *   iconName = "tree"
 * )
 */
class LinkTree extends PlatformBase {
}
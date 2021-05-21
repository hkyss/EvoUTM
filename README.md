# UrchinTrackingModule

## Install
- Copy this repo into your site folder
- Create a snippet witch code
```php
/**
 * UrchinTrackingModule
 *
 * set/get UTM
 *
 * @category    snippet
 * @version     1.0
 * @license     http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @properties
 * @internal    @modx_category Content
 * @internal    @installset base
 * @author      hkyss [hkyss.off.dev@gmail.com]
 * @lastupdate  21.05.2021
 */

include_once MODX_BASE_PATH.'assets/snippets/UrchinTrackingModule/snippet.UrchinTrackingModule.php';
```

## Example
```
[!UrchinTrackingModule? &status=`set`!]

[!UrchinTrackingModule? &status=`get` &value=`utm_source`!]
```
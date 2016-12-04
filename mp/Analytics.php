<?php
namespace ymaker\google\analytics\mp;

/**
 * $analytics = \Yii::createObject([
 *      'class' => \ymaker\google\analytics\mp\Analytics::className(),
 *      'v' => 1,                                       // Protocol version. Default value: 1
 *      'tid' => 'UA-XXXX-Y'                            // Tracking ID / Web Property ID
 *      'cid' => '35009a79-1a05-49d7-b876-2b884d0f825b' // Client ID. Random UUID (http://www.ietf.org/rfc/rfc4122.txt)
 * ]);
 *
 * Usage:
 *
 * $responce = $analytics->send([
 *      't' => 'event',     // Hit Type.
 *      'ec' => 'video',    // Event Category.
 *      'ea' => 'play',     // Event Action.
 *      'el' => 'holiday',  // Event label.
 *      'ev' => 300,        // Event value.
 * ]);
 *
 * @author Ruslan Saiko <ruslan.saiko.dev@gmail.com>
 */
class Analytics extends BaseAnalytics
{
}
<?php
namespace ymaker\google\analytics\mp;

/**
 *
 * @author Ruslan Saiko <ruslan.saiko.dev@gmail.com>
 */
interface SendInterface
{
    /**
     *
     * $interfaceImplementation->send([
     *      'ec' => 'event',    // Type. Required.
     *      'ec' => 'video',
     *      'ea' => 'play',
     *      'el' => 'holiday',
     *      'ev' => 300,
     * ]);
     *
     * @param array $data
     * @return yii\httpclient\Response
     */
    function send(array $data = []);
}
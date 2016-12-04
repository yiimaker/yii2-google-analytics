<?php
namespace ymaker\google\analytics\mp;

use yii\base\Component;
use yii\base\InvalidParamException;
use yii\httpclient\Client;
use yii\helpers\ArrayHelper;

/**
 *
 * @author Ruslan Saiko <ruslan.saiko.dev@gmail.com>
 */
abstract class BaseAnalytics extends Component implements SendInterface
{
    /** @var string Api URL */
    private $baseUrl = 'https://ssl.google-analytics.com/';

    /** @var int Version */
    public $v = 1;

    /** @var string Tracking ID / Property ID. */
    public $tid;

    /** @var string Anonymous Client ID */
    public $cid;

    /** @var array */
    public $data = [];

    /** @var bool send request to debug url */
    public $isDebug = false;

    /** @var \yii\httpclient\Client */
    protected $_client;

    /** @inheritdoc */
    public function init()
    {
        parent::init();

        $this->_client = new Client([
            'baseUrl' => $this->baseUrl,

        ]);

    }

    /**
     * @inheritdoc
     */
    function send(array $data = [])
    {
        $v = $this->v;
        $cid = $this->cid;
        $tid = $this->tid;

        if (empty($data) && empty($this->data)) {
                throw new InvalidParamException("Data must be set.");
        }

        $response = $this->_client->createRequest()
            ->setMethod('post')
            ->setUrl($this->isDebug ? "debug/collect" : 'collect')
            ->setData(ArrayHelper::merge($this->data, $data, compact('v', 'tid', 'cid')))
            ->send();

        return $response;
    }

}
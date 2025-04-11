<?php
namespace Week1\Helloworld\Controller\Index;

// use Week1\Helloworld\Model\Cache\Type\CacheType;

class Helloworld extends \Magento\Framework\App\Action\Action
{
    protected $customCache;
    protected $_pageFactory;

    // const CACHE_KEY = 'hello_name';

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        // \Week1\Helloworld\Model\Cache\Type\CacheType $customCache
    ) {
        $this->_pageFactory = $pageFactory;
        // $this->customCache = $customCache;
        return parent::__construct($context);
    }

    public function execute()
    {
        $name = $this->getRequest()->getParam('name');
        // $cachedName = $this->customCache->load(self::CACHE_KEY);

        // if ($name && !$cachedName) {
        //     // Chưa có cache thì lưu
        //     $this->customCache->save($name, self::CACHE_KEY, [CacheType::CACHE_TAG], 3600);
        //     $cachedName = $name; // cập nhật lại biến để hiển thị
        // } 

        echo "<h3>Cache hiện tại:</h3>";
        // echo "<ul><li><strong>" . self::CACHE_KEY . "</strong>: " . ($cachedName ?? 'null') . "</li></ul>";

        exit;
    }
}

<?php
namespace Firegento\DevDashboard\Api;

use Firegento\DevDashboard\Api\Data\ConfigInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SearchCriteriaInterface;

interface ConfigRepositoryInterface
{
    /**
     * @param ConfigInterface $page
     * @return ConfigInterface
     */
    public function save(ConfigInterface $page);

    /**
     * @param int $userId
     * @return ConfigInterface
     */
    public function getByUserId($userId);
}

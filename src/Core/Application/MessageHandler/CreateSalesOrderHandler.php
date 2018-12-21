<?php
namespace App\Core\Application\MessageHandler;

use App\Core\Domain\Message\CreateSalesOrder;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class CreateSalesOrderHandler implements MessageHandlerInterface
{
    public function __invoke(CreateSalesOrder $createSalesOrder)
    {
        // Todo: Create Purchase order
        echo 'CreateSalesOrderHandler';
        var_dump($createSalesOrder);
    }
}
<?php
namespace App\Core\Application\MessageHandler;

use App\Core\Domain\Message\CreateSalesOrder;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class CreateSalesOrder2Handler implements MessageHandlerInterface
{
    public function __invoke(CreateSalesOrder $createSalesOrder)
    {
        // Todo: Create Purchase order
        echo 'CreateSalesOrder2Handler';
        var_dump($createSalesOrder);
    }
}
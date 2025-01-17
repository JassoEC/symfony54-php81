<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController
{
  public function __construct(private LoggerInterface $logger)
  {
  }

  #[Route('/health_check', name: 'health_check', methods: ['GET'])]
  public function __invoke(): Response
  {
    $this->logger->error('This is the health check controller');
    return new JsonResponse(['status' => 'ok', 'message' => 'SR en symfony']);
  }
}

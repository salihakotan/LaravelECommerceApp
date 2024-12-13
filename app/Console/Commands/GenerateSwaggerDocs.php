<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class GenerateSwaggerDocs extends Command
{
    protected $signature = 'swagger:generate';

    protected $description = 'Generate Swagger documentation for all routes';

    public function handle()
    {
        $routes = Route::getRoutes();

        $swaggerDocs = [
            'swagger' => '2.0',
            'info' => [
                'version' => '1.0.0',
                'title' => 'Laravel Livewire API',
                'description' => 'Auto-generated API documentation for Livewire endpoints',
            ],
            'paths' => [],
        ];

        foreach ($routes as $route) {
            $uri = $route->uri();
            $method = strtolower($route->methods()[0]);

            $swaggerDocs['paths']["/$uri"][$method] = [
                'summary' => "Endpoint: $uri",
                'responses' => [
                    '200' => [
                        'description' => 'Successful response',
                    ],
                ],
            ];
        }

        file_put_contents(storage_path('api-docs/api-docs.json'), json_encode($swaggerDocs, JSON_PRETTY_PRINT));

        $this->info('Swagger documentation generated successfully!');
    }
}

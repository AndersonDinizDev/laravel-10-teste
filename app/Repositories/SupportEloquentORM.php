<?php
use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Models\Support;
use App\Repositories\SupportRepositoryInterface;
use stdClass;

class SupportEloquentORM implements SupportRepositoryInterface 
    {

        public function __construct(protected Support $model)
        {
        }

        public function getAll(string $filter = null): array{

            return $this->model->where(function () use ($filter) {
                if ($filter) {
                    
                }
            })->paginate()->toArray();

        }
        public function findOne(string $id): stdClass|null{

        }
        public function delete(string $id): void{

        }
        public function new(CreateSupportDTO $dto): stdClass{

        }
        public function update(UpdateSupportDTO $dto): stdClass|null{

        }
    }
<?php
// Trong Laravel, Repository Pattern thường được sử dụng để tạo các lớp repository, giúp tách biệt logic của ứng dụng khỏi cơ sở dữ liệu.
namespace App\Repositories\User;

use App\Models\Permission;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\User\PermissionRepositoryInterface;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    protected $model;
    public function __construct(
        Permission $model
    ) {
        $this->model = $model;
    }
}

<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Enums\ResponseEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\{
    StorePermissionRequest,
    UpdatePermissionRequest
};
use App\Http\Resources\User\PermissionResource;
use App\Repositories\Interfaces\User\PermissionRepositoryInterface;
use App\Services\Interfaces\User\PermissionServiceInterface;

class PermissionController extends Controller
{
    protected $userCatalogueService;
    protected $userCatalogueRepository;
    public function __construct(
        PermissionServiceInterface $userCatalogueService,
        PermissionRepositoryInterface $userCatalogueRepository
    ) {
        $this->userCatalogueService = $userCatalogueService;
        $this->userCatalogueRepository = $userCatalogueRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = $this->userCatalogueService->paginate();
        $statusCode = $response['status'] == 'success' ? ResponseEnum::OK : ResponseEnum::INTERNAL_SERVER_ERROR;
        return response()->json($response, $statusCode);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        $response = $this->userCatalogueService->create();
        $statusCode = $response['status'] == 'success' ? ResponseEnum::CREATED : ResponseEnum::INTERNAL_SERVER_ERROR;
        return response()->json($response, $statusCode);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userCatalogue = new PermissionResource($this->userCatalogueRepository->findById($id));
        return response()->json([
            'status' => 'success',
            'messages' => '',
            'data' => $userCatalogue ?? []
        ], ResponseEnum::OK);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, string $id)
    {
        $response = $this->userCatalogueService->update($id);
        $statusCode = $response['status'] == 'success' ? ResponseEnum::OK : ResponseEnum::INTERNAL_SERVER_ERROR;
        return response()->json($response, $statusCode);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = $this->userCatalogueService->destroy($id);
        $statusCode = $response['status'] == 'success' ? ResponseEnum::OK : ResponseEnum::INTERNAL_SERVER_ERROR;
        return response()->json($response, $statusCode);
    }
}

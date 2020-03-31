<?php

namespace VCComponent\Laravel\Order\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use VCComponent\Laravel\Order\Repositories\OrderItemRepository;
use VCComponent\Laravel\Order\Transformers\OrderItemTransformer;
use VCComponent\Laravel\Order\Validators\OrderItemValidator;
use VCComponent\Laravel\Vicoders\Core\Controllers\ApiController;

class OrderItemController extends ApiController {
    protected $repository;

    public function __construct(OrderItemRepository $repository, OrderItemValidator $validator) {
        $this->repository  = $repository;
        $this->entity      = $repository->getEntity();
        $this->validator   = $validator;
        $this->transformer = OrderItemTransformer::class;

        if (config('order.auth_middleware.admin.middleware') !== '') {
            $user = $this->getAuthenticatedUser();
            if (!$this->entity->ableToUse($user)) {
                throw new PermissionDeniedException();
            }
        }

    }

    public function store(Request $request)
    {

        $this->validator->isValid($request, 'RULE_ADMIN_CREATE');

        $data      = $request->all();
        $orderItem = $this->repository->create($data);

        return $this->response->item($orderItem, new $this->transformer);
    }

    public function update(Request $request, $id) {

        $this->validator->isValid($request, 'RULE_ADMIN_UPDATE');

        $this->repository->findById($id);

        $data      = $request->all();
        $orderItem = $this->repository->update($data, $id);

        return $this->response->item($orderItem, new $this->transformer);
    }

}

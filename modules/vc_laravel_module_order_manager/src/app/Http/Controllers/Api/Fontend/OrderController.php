<?php

namespace VCComponent\Laravel\Order\Http\Controllers\Api\Fontend;

use Illuminate\Http\Request;
use VCComponent\Laravel\Order\Repositories\OrderRepository;
use VCComponent\Laravel\Order\Transformers\OrderItemsTransformer;
use VCComponent\Laravel\Order\Transformers\OrderTransformer;
use VCComponent\Laravel\Order\Validators\OrderValidator;
use VCComponent\Laravel\Vicoders\Core\Controllers\ApiController;

class OrderController extends ApiController
{
    protected $repository;
    protected $validator;

    public function __construct(OrderRepository $repository, OrderValidator $validator)
    {
        $this->repository  = $repository;
        $this->entity      = $repository->getEntity();
        $this->validator   = $validator;
        $this->transformer = OrderTransformer::class;
    }

    public function index(Request $request, $id)
    {
        $query = $this->entity;

        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, [], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $per_page = $request->has('per_page') ? (int) $request->get('per_page') : 15;

        $order = $query->where('user_id', $id)->paginate($per_page);

        return $this->response->paginator($order, new $this->transformer);
    }

    public function show(Request $request, $id)
    {
        $query = $this->entity;

        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, [], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $per_page = $request->has('per_page') ? (int) $request->get('per_page') : 15;

        $order = $query->where('user_id', $id)->paginate($per_page);

        return $this->response->paginator($order, new $this->transformer);
    }

    public function store(Request $request)
    {

        $this->validator->isValid($request, 'RULE_CREATE');

        $data  = $request->all();

        $order = $this->repository->create($data);

        return $this->response->item($order, new $this->transformer);
    }
}

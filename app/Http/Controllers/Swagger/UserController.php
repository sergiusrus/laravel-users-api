<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get (
 *     path="/api/users",
 *     summary="Get users",
 *     tags={"User"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="name", type="string"),
 *                 @OA\Property(property="email", type="string"),
 *              )),
 *          ),
 *     )
 * )
 * @OA\Get (
 *     path="/api/users/{id}",
 *     summary="Get user information",
 *     tags={"User"},
 *     @OA\Parameter(
 *         name="id",
 *         description="User ID",
 *         required=true,
 *         in="path"
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="name", type="string"),
 *                 @OA\Property(property="email", type="string"),
 *              ),
 *          ),
 *     )
 * )
 * @OA\Post(
 *     path="/api/users",
 *     summary="Store new user",
 *     tags={"User"},
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string"),
 *                      @OA\Property(property="email", type="string"),
 *                      @OA\Property(property="password", type="string"),
 *                  )
 *              }
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="name", type="string"),
 *                 @OA\Property(property="email", type="string"),
 *              ),
 *          ),
 *     )
 * )
 * @OA\Patch (
 *     path="/api/users/{id}",
 *     summary="Update user",
 *     tags={"User"},
 *     @OA\Parameter(
 *         name="id",
 *         description="User ID",
 *         required=true,
 *         in="path"
 *     ),
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string"),
 *                      @OA\Property(property="email", type="string"),
 *                      @OA\Property(property="password", type="string"),
 *                  )
 *              }
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="name", type="string"),
 *                 @OA\Property(property="email", type="string"),
 *              ),
 *          ),
 *     )
 * )
 * @OA\Delete (
 *     path="/api/users/{id}",
 *     summary="Delete user",
 *     tags={"User"},
 *     @OA\Parameter(
 *         name="id",
 *         description="User ID",
 *         required=true,
 *         in="path"
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string"),
 *          ),
 *     )
 * )
 */

class UserController extends Controller
{

}

<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1\AI;

use Automattic\WooCommerce\Blocks\AIContent\UpdateProducts;
use Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute;

/**
 * Product class.
 *
 * @internal
 */
class Product extends AbstractRoute {
	/**
	 * The route identifier.
	 *
	 * @var string
	 */
	const IDENTIFIER = 'ai/product';

	/**
	 * The schema item identifier.
	 *
	 * @var string
	 */
	const SCHEMA_TYPE = 'ai/product';

	/**
	 * Get the path of this REST route.
	 *
	 * @return string
	 */
	public function get_path() {
		return self::get_path_regex();
	}

	/**
	 * Get the path of this rest route.
	 *
	 * @return string
	 */
	public static function get_path_regex() {
		return '/ai/product';
	}

	/**
	 * Get method arguments for this REST route.
	 *
	 * @return array An array of endpoints.
	 */
	public function get_args() {
		return [
			[
				'methods'             => \WP_REST_Server::CREATABLE,
				'callback'            => [ $this, 'get_response' ],
				'permission_callback' => [ Middleware::class, 'is_authorized' ],
				'args'                => [
					'products_information' => [
						'description' => __( 'Data generated by AI for updating dummy products.', 'woocommerce' ),
						'type'        => 'object',
					],
					'last_product'         => [
						'description' => __( 'Whether the product being updated is the last one in the loop', 'woocommerce' ),
						'type'        => 'boolean',
					],
				],
			],
			'schema'      => [ $this->schema, 'get_public_item_schema' ],
			'allow_batch' => [ 'v1' => true ],
		];
	}

	/**
	 * Update product with the content and image powered by AI.
	 *
	 * @param  \WP_REST_Request $request Request object.
	 *
	 * @return bool|string|\WP_Error|\WP_REST_Response
	 */
	protected function get_route_post_response( \WP_REST_Request $request ) {
		$product_updater     = new UpdateProducts();
		$product_information = $request['products_information'] ?? array();

		if ( empty( $product_information ) ) {
			return rest_ensure_response(
				array(
					'ai_content_generated' => true,
				)
			);
		}

		$product_updater->update_product_content( $product_information );

		$last_product_to_update = $request['last_product'] ?? false;

		if ( $last_product_to_update ) {
			flush_rewrite_rules();
		}

		return rest_ensure_response(
			array(
				'ai_content_generated' => true,
			)
		);
	}

}

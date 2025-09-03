<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Adjustment
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property string|null $reference_code
 * @property int $warehouse_id
 * @property int $total_products
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 *  * @property-read \App\Models\Warehouse $warehouse
 * @property-read int|null $media_count
 *  * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AdjustmentItem[] $adjustmentItems
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereWarehouseId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AdjustmentItem> $adjustmentItems
 * @property-read int|null $adjustment_items_count
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Adjustment whereTotalProducts($value)
 * @mixin \Eloquent
 */
	class Adjustment extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\AdjustmentItem
 *
 * @property int $id
 * @property int $adjustment_id
 * @property int $product_id
 * @property float|null $quantity
 * @property int $method_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereAdjustmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereMethodType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdjustmentItem whereUpdatedAt($value)
 * @property-read \App\Models\Adjustment $adjustment
 * @property-read mixed $sale_unit
 * @property-read \App\Models\Product $product
 * @mixin \Eloquent
 */
	class AdjustmentItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * Class BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @mixin Model
 */
	class BaseModel extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BaseUnit
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit whereUpdatedAt($value)
 * @property int $is_default
 * @method static \Illuminate\Database\Eloquent\Builder|BaseUnit whereIsDefault($value)
 * @mixin \Eloquent
 */
	class BaseUnit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brand
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $image_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @mixin \Eloquent
 */
	class Brand extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string|null $short_code
 * @property int|null $phone_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\State[] $states
 * @property-read int|null $states_count
 * @method static \Database\Factories\CountryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhoneCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CouponCode
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon $end_date
 * @property int $how_many_time_can_use
 * @property float $discount
 * @property int $how_many_time_used
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereFixedDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereHowManyTimeCanUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereHowManyTimeUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereUpdatedAt($value)
 * @property int $discount_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponCode whereDiscountType($value)
 * @mixin \Eloquent
 */
	class CouponCode extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $symbol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $city
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @property string|null $dob
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Quotation[] $quotations
 * @property-read int|null $quotations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale[] $sales
 * @property-read int|null $sales_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleReturn[] $salesReturns
 * @property-read int|null $sales_returns_count
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDob($value)
 * @mixin \Eloquent
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Expense
 *
 * @property int $id
 * @property string $date
 * @property int $warehouse_id
 * @property int $expense_category_id
 * @property float $amount
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ExpenseCategory $expenseCategory
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereExpenseCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereReferenceCode($value)
 * @property string|null $reference_code
 * @property string|null $title
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereTitle($value)
 * @mixin \Eloquent
 */
	class Expense extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExpenseCategory
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpenseCategory whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Expense> $expenses
 * @property-read int|null $expenses_count
 * @mixin \Eloquent
 */
	class ExpenseCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hold
 *
 * @property int $id
 * @property string|null $reference_code
 * @property \Illuminate\Support\Carbon $date
 * @property int $customer_id
 * @property int $warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property float|null $received_amount
 * @property float|null $paid_amount
 * @property int|null $status
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HoldItem[] $holdItems
 * @property-read int|null $hold_items_count
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Hold newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hold newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hold query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hold whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class Hold extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\HoldItem
 *
 * @property int $id
 * @property int $hold_id
 * @property int $product_id
 * @property float|null $product_price
 * @property float|null $net_unit_price
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property array $sale_unit
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hold $hold
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereHoldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereSaleUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoldItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class HoldItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property string $iso_code
 * @property int $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereIsoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Language extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\MailTemplate
 *
 * @property int $id
 * @property string $template_name
 * @property string $content
 * @property string $type
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MailTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class MailTemplate extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $product_unit
 * @property int $product_type 1=Single, 2=Variable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array|string $image_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VariationType> $variationTypes
 * @property-read int|null $variation_types_count
 * @property-read \App\Models\Variation|null $variations
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereProductType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereProductUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainProduct whereUpdatedAt($value)
 */
	class MainProduct extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\ManageStock
 *
 * @property int $id
 * @property int $warehouse_id
 * @property int $product_id
 * @property float $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock query()
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereWarehouseId($value)
 * @property float $alert
 * @method static \Illuminate\Database\Eloquent\Builder|ManageStock whereAlert($value)
 * @mixin \Eloquent
 */
	class ManageStock extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\POSRegister
 *
 * @property int $id
 * @property float $cash_in_hand
 * @property \Illuminate\Support\Carbon|null $closed_at
 * @property float|null $cash_in_hand_while_closing
 * @property float|null $bank_transfer
 * @property float|null $cheque
 * @property float|null $other
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister query()
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereBankTransfer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereCashInHand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereCashInHandWhileClosing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereCheque($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereUserId($value)
 * @mixin \Eloquent
 * @property float|null $total_sale
 * @property float|null $total_return
 * @property float|null $total_amount
 * @property string|null $notes
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereTotalReturn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|POSRegister whereTotalSale($value)
 */
	class POSRegister extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin Model
 */
	class Permission extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $product_code
 * @property int $product_category_id
 * @property int $brand_id
 * @property int $main_product_id
 * @property float $product_cost
 * @property float $product_price
 * @property string $product_unit
 * @property string|null $sale_unit
 * @property string|null $purchase_unit
 * @property int $warehouse_id
 * @property string|null $stock_alert
 * @property float|null $order_tax
 * @property string|null $tax_type
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\MainProduct|null $mainProduct
 * @property-read string $image_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\ProductCategory|null $productCategory
 * @property-read \App\Models\Warehouse|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMainProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOrderTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePurchaseUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSaleUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStockAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWarehouseId($value)
 * @property-read string $barcode_image_url
 * @property int|null $barcode_symbol
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcodeSymbol($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase[] $purchases
 * @property-read int|null $purchases_count
 * @property-read \App\Models\ManageStock|null $stock
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ManageStock[] $stocks
 * @property-read int|null $stocks_count
 * @property string|null $quantity_limit
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantityLimit($value)
 * @mixin \Eloquent
 * @property-read \App\Models\VariationProduct|null $variationProduct
 * @property-read \App\Models\VariationType|null $variationType
 */
	class Product extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * Class ProductCategory
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $image_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static Builder|ProductCategory newModelQuery()
 * @method static Builder|ProductCategory newQuery()
 * @method static Builder|ProductCategory query()
 * @method static Builder|ProductCategory whereCreatedAt($value)
 * @method static Builder|ProductCategory whereId($value)
 * @method static Builder|ProductCategory whereName($value)
 * @method static Builder|ProductCategory whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @mixin \Eloquent
 */
	class ProductCategory extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Purchase
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property int $supplier_id
 * @property int $warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property float|null $received_amount
 * @property int|null $status
 * @property string|null $notes
 * @property string|null $reference_code
 * @property-read \App\Models\Supplier $supplier
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PurchaseItem[] $purchaseItems
 * @property-read int|null $purchase_items_count
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereWarehouseId($value)
 * @property float|null $paid_amount
 * @property int|null $payment_type
 * @property-read string $purchase_pdf_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static Builder|Purchase search($search = '')
 * @method static Builder|Purchase wherePaidAmount($value)
 * @method static Builder|Purchase wherePaymentType($value)
 * @mixin \Eloquent
 */
	class Purchase extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\PurchaseItem
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $product_id
 * @property float|null $product_cost
 * @property float|null $net_unit_cost
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property int $purchase_unit
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Purchase $purchase
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereNetUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereProductCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem wherePurchaseUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PurchaseItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\PurchaseReturn
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property int $supplier_id
 * @property int $warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property float|null $received_amount
 * @property float|null $paid_amount
 * @property int|null $payment_type
 * @property int|null $status
 * @property int|null $payment_status
 * @property string|null $notes
 * @property string|null $reference_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $purchase_return_pdf_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PurchaseReturnItem[] $purchaseReturnItems
 * @property-read int|null $purchase_return_items_count
 * @property-read \App\Models\Supplier $supplier
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturn whereWarehouseId($value)
 * @mixin \Eloquent
 */
	class PurchaseReturn extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\PurchaseReturnItem
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $product_id
 * @property float|null $product_cost
 * @property float|null $net_unit_cost
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property int $purchase_unit
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\PurchaseReturn|null $purchaseReturn
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem query()
 *  * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereNetUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereProductCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem wherePurchaseReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem wherePurchaseUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereUpdatedAt($value)
 * @property int $purchase_return_id
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseReturnItem whereCreatedAt($value)
 * @mixin \Eloquent
 */
	class PurchaseReturnItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Quotation
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property int $customer_id
 * @property int $warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property float|null $received_amount
 * @property float|null $paid_amount
 * @property int|null $status
 * @property string|null $note
 * @property string|null $reference_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereWarehouseId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\QuotationItem[] $quotationItems
 * @property-read int|null $quotation_items_count
 * @property int $is_sale_created
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereIsSaleCreated($value)
 * @mixin \Eloquent
 */
	class Quotation extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\QuotationItem
 *
 * @property int $id
 * @property int $quotation_id
 * @property int $product_id
 * @property float|null $product_price
 * @property float|null $net_unit_price
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property array $sale_unit
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Quotation $quotation
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereQuotationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereSaleUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class QuotationItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sale
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property int $customer_id
 * @property int $warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property float|null $received_amount
 * @property float|null $paid_amount
 * @property int|null $payment_type
 * @property string|null $note
 * @property string|null $reference_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $status
 * @property int|null $payment_status
 * @property-read \App\Models\Customer $customer
 * @property-read string $sale_pdf_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleItem[] $saleItems
 * @property-read int|null $sale_items_count
 * @property-read \App\Models\Warehouse $warehouse
 * @property-read \App\Models\SalesPayment $latestPayment
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereWarehouseId($value)
 * @property int $is_return
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SalesPayment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereIsReturn($value)
 * @mixin Eloquent
 * @property int|null $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereUserId($value)
 */
	class Sale extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\SaleItem
 *
 * @property int $id
 * @property int $sale_id
 * @property int $product_id
 * @property float|null $product_price
 * @property float|null $net_unit_price
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property int $sale_unit
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Sale $sale
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereSaleUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class SaleItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\SaleReturn
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property int $customer_id
 * @property int $warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property float|null $paid_amount
 * @property int|null $payment_type
 * @property string|null $note
 * @property string|null $reference_code
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer $customer
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleReturnItem[] $saleReturnItems
 * @property-read int|null $sale_return_items_count
 * @property-read \App\Models\Warehouse $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereWarehouseId($value)
 * @property int|null $sale_id
 * @property-read \App\Models\Sale|null $sale
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn whereSaleId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturn user($userId)
 */
	class SaleReturn extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\SaleReturnItem
 *
 * @property int $id
 * @property int $sale_return_id
 * @property int $product_id
 * @property float|null $product_price
 * @property float|null $net_unit_price
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property array $sale_unit
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read SaleReturnItem $saleReturn
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereSaleReturnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereSaleUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereUpdatedAt($value)
 * @property float|null $sold_quantity
 * @method static \Illuminate\Database\Eloquent\Builder|SaleReturnItem whereSoldQuantity($value)
 * @mixin \Eloquent
 */
	class SaleReturnItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\SalesPayment
 *
 * @property int $id
 * @property int $sale_id
 * @property int $reference
 * @property string $payment_date
 * @property int|null $payment_type
 * @property float|null $amount
 * @property float|null $received_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment whereUpdatedAt($value)
 * @property-read \App\Models\Sale $sale
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|SalesPayment user($userId)
 */
	class SalesPayment extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $logo
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 * @mixin \Eloquent
 */
	class Setting extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\SmsSetting
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSetting whereValue($value)
 * @mixin \Eloquent
 */
	class SmsSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SmsTemplate
 *
 * @property int $id
 * @property string $template_name
 * @property string $content
 * @property string $type
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class SmsTemplate extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Country $country
 * @property-read string $country_name
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Supplier
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier query()
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $city
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Purchase> $purchases
 * @property-read int|null $purchases_count
 * @mixin \Eloquent
 */
	class Supplier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transfer
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property int $from_warehouse_id
 * @property int $to_warehouse_id
 * @property float|null $tax_rate
 * @property float|null $tax_amount
 * @property float|null $discount
 * @property float|null $shipping
 * @property float|null $grand_total
 * @property int|null $status
 * @property string|null $note
 * @property string|null $reference_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Warehouse $fromWarehouse
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary
 *  * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TransferItem[] $transferItems
 * @property-read int|null $media_count
 * @property-read \App\Models\Warehouse $toWarehouse
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereFromWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereReferenceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereToWarehouseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer whereUpdatedAt($value)
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TransferItem> $transferItems
 * @property-read int|null $transfer_items_count
 * @mixin \Eloquent
 */
	class Transfer extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\TransferItem
 *
 * @property int $id
 * @property int $transfer_id
 * @property int $product_id
 * @property float|null $product_price
 * @property float|null $net_unit_price
 * @property int $tax_type
 * @property float|null $tax_value
 * @property float|null $tax_amount
 * @property int $discount_type
 * @property float|null $discount_value
 * @property float|null $discount_amount
 * @property float|null $quantity
 * @property float|null $sub_total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereNetUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereTaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereTaxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereTransferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransferItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TransferItem extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * Class Unit
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property string $base_unit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereBaseUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property int $warehouse
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @property-read string $image_url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @property string $language
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLanguage($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sale> $sales
 * @property-read int|null $sales_count
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWarehouse($value)
 */
	class User extends \Eloquent implements \Spatie\MediaLibrary\HasMedia, \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * App\Models\Variation
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VariationType> $variation_types
 * @property-read int|null $variation_types_count
 * @method static \Illuminate\Database\Eloquent\Builder|Variation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VariationProduct> $variationProducts
 * @property-read int|null $variation_products_count
 */
	class Variation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int|null $main_product_id
 * @property int $product_id
 * @property int $variation_id
 * @property int $variation_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MainProduct|null $mainProduct
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Variation $variation
 * @property-read \App\Models\VariationType $variationType
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereMainProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereVariationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationProduct whereVariationTypeId($value)
 */
	class VariationProduct extends \Eloquent implements \App\Models\Contracts\JsonResourceful {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $variation_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Variation $variation
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VariationProduct> $variationProducts
 * @property-read int|null $variation_products_count
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VariationType whereVariationId($value)
 */
	class VariationType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Warehouse
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $country
 * @property string $city
 * @property string|null $email
 * @property string|null $zip_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse query()
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warehouse whereZipCode($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Expense> $expenses
 * @property-read int|null $expenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Purchase> $purchases
 * @property-read int|null $purchases_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sale> $sales
 * @property-read int|null $sales_count
 * @mixin \Eloquent
 */
	class Warehouse extends \Eloquent {}
}


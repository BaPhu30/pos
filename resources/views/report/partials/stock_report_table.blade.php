@php
  $custom_labels = json_decode(session('business.custom_labels'), true);
  $product_custom_field1 = !empty($custom_labels['product']['custom_field_1']) ? $custom_labels['product']['custom_field_1'] : __('lang_v1.product_custom_field1');
  $product_custom_field2 = !empty($custom_labels['product']['custom_field_2']) ? $custom_labels['product']['custom_field_2'] : __('lang_v1.product_custom_field2');
  $product_custom_field3 = !empty($custom_labels['product']['custom_field_3']) ? $custom_labels['product']['custom_field_3'] : __('lang_v1.product_custom_field3');
  $product_custom_field4 = !empty($custom_labels['product']['custom_field_4']) ? $custom_labels['product']['custom_field_4'] : __('lang_v1.product_custom_field4');
@endphp
<table class="table table-bordered table-striped" id="stock_report_table">
    <thead>
        <tr>
            <th>SKU</th>
            <th>@lang('business.product')</th>
            <th>@lang('lang_v1.variation')</th>
            <th>@lang('product.category')</th>
            <th>@lang('purchase.business_location')</th>
            <th>@lang('product.product_type')</th>
            @can('view_product_stock_value')
            <th>@lang('product.wage_buy')</th>
            <th>@lang('product.wage_sell')</th>
            @endcan
            <th>@lang('report.current_stock')</th>
            <th>@lang('product.total_product_sold')</th>
            <th>@lang('product.total_product_transfered')</th>
            <th>@lang('product.total_product_adjusted')</th>
            @can('view_product_stock_value')
            <th class="stock_price">@lang('product.alert_quantity') @show_tooltip(__('product.alert_quantity_help'))</th>
            @endcan
            <th>{{$product_custom_field1}}</th>
            <th>{{$product_custom_field2}}</th>
            <th>{{$product_custom_field3}}</th>
            <th>{{$product_custom_field4}}</th>
            @if($show_manufacturing_data)
                <th class="current_stock_mfg">@lang('manufacturing::lang.current_stock_mfg') @show_tooltip(__('manufacturing::lang.mfg_stock_tooltip'))</th>
            @endif
        </tr>
    </thead>
    <tfoot>
        <tr class="bg-gray font-17 text-center footer-total">
            <td colspan="6"><strong>@lang('sale.total'):</strong></td>
            @can('view_product_stock_value')
            <td class="footer_total_stock_price"></td>
            <td class="footer_stock_value_by_sale_price"></td>
            @endcan
            <td class="footer_total_stock"></td>
            <td class="footer_total_sold"></td>
            <td class="footer_total_transfered"></td>
            <td class="footer_total_adjusted"></td>
            @can('view_product_stock_value')
            <td class="footer_potential_profit"></td>
            @endcan
            <td colspan="4"></td>
            @if($show_manufacturing_data)
                <td class="footer_total_mfg_stock"></td>
            @endif
        </tr>
    </tfoot>
</table>
<form action="{{ url('api/vendors')}}" class="searchcontent" vendor-type="{{ \Request::segment(2)}}">
    <div class="loader_search"></div>
    <ul class="banner-form">
        <li>
            <div class="form-group">
                <select class="form-control search_category">
                    <option value="">All categories</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </li>
        <li>
            <div class="form-group">
                <select class="form-control search_country" onchange="getVendorCity(this.value)">
                    <option value="">Country</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </li>
        <li>
            <div class="form-group">
                <select class="form-control search_city" id="cityVendor">
                    <option value="">City</option>
                </select>
            </div>
        </li>
    </ul>
</form>

<script type="text/javascript">
    function getVendorCity(country){
        if(country != ''){
            $.ajax({
                beforeSend: function() {
                    $('.loader').show();
                    $('.loader').html("<img src='https://loading.io/spinners/dual-ring/lg.dual-ring-loader.gif' />");
                },
                url : '{{url("api/vendorcity")}}/'+country,
                success : function(result){
                    $('.loader').hide();
                    $('#cityVendor').html(result);
                }
            })
        } else {
            $('#cityVendor').html('<option value="">City</option>');
        }
    }
</script>
{{ Html::script('js/vendor_list.js')}}
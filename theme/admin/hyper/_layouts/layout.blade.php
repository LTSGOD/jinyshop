<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            {{$slot}}

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <!-- Footer Start -->
    {{-- @theme("_partials/footer") --}}
    @includeIf('theme::admin.hyper._partials.footer')
    <!-- end Footer -->

</div>

<!-- tab-nav -->
<!-- div class="row collapse multi-collapse" id="id_nav_container_1" -->
    
<div class="col">
<!-- --- -->
<ul class="nav nav-pills nav-pills-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">
    
    @if( auth()->user()->can('create-quality_record_cutting') )
    <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
        <a id="id_nav_link_1" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! route('setupConfigurationCutting.index', []) !!}" role="tab" aria-controls="id_tab_content_1" aria-selected="false">
            <span><i class="fas fa-industry"></i> Cutting</span>
        </a>
    </li>
    @endif
    
    @if( auth()->user()->can('create-quality_record_r_q_c') )
    <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
        <a id="id_nav_link_2" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! route('setupConfigurationRQC.index', []) !!}" role="tab" aria-controls="id_tab_content_2" aria-selected="false">
            <span><i class="fab fa-tripadvisor"></i> RQC</span>
        </a>
    </li>
    @endif
    
    @if( auth()->user()->can('create-quality_record_sewing_check') )
    <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
        <a id="id_nav_link_3" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! route('setupConfigurationSewingCheck.index', []) !!}" role="tab" aria-controls="id_tab_content_3" aria-selected="false">
            <span><i class="fas fa-glasses"></i> SC 100%</span>
        </a>
    </li>
    @endif
    
    @if( auth()->user()->can('create-quality_record_sewing_audit') )
    <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
        <a id="id_nav_link_4" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! route('setupConfigurationSewingAudit.index', []) !!}" role="tab" aria-controls="id_tab_content_4" aria-selected="false">
            <span><i class="fas fa-paste"></i> Sewing AQL Audit</span>
        </a>
    </li>
    @endif
    
    @if( auth()->user()->can('create-quality_record_finishing') )
    <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
        <a id="id_nav_link_5" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! route('setupConfigurationFinishing.index', []) !!}" role="tab" aria-controls="id_tab_content_5" aria-selected="false">
            <span><i class="fas fa-box"></i> Finishing</span>
        </a>
    </li>
    @endif
    
    @if( auth()->user()->can('create-quality_record_c_n_i') )
    <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
        <a id="id_nav_link_6" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! route('setupConfigurationCNI.index', []) !!}" role="tab" aria-controls="id_tab_content_6" aria-selected="false">
            <span><i class="fab fa-docker"></i> CNI</span>
        </a>
    </li>
    @endif
    
</ul>
<!-- --- -->   
</div>
    
<!-- /div -->
<!-- /.tab-nav -->
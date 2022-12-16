/**
 * DataTables Advanced
 */

'use strict';

$(function () {
  var isRtl = $('html').attr('data-textdirection') === 'rtl';

  var dt_ajax_table = $('.datatables-ajax'),
    dt_filter_table = $('.dt-column-search'),
    dt_adv_filter_table = $('.dt-advanced-search'),
    dt_responsive_table = $('.dt-responsive'),
    assetPath = '../../../app-assets/';

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }

  // Advanced Search Functions Starts
  // --------------------------------------------------------------------

  // Filter column wise function
  function filterColumn(i, val) {
    if (i == 5) {
      var startDate = $('.start_date').val(),
        endDate = $('.end_date').val();
      if (startDate !== '' && endDate !== '') {
        $.fn.dataTableExt.afnFiltering.length = 0; // Reset datatable filter
        dt_adv_filter_table.dataTable().fnDraw(); // Draw table after filter
        filterByDate(i, startDate, endDate); // We call our filter function
      }

      $('.dt-advanced-search').dataTable().fnDraw();
    } else {
      $('.dt-advanced-search').DataTable().column(i).search(val, false, true).draw();
    }
  }

  // Datepicker for advanced filter
  var separator = ' - ',
    rangePickr = $('.flatpickr-range'),
    dateFormat = 'MM/DD/YYYY';
  var options = {
    autoUpdateInput: false,
    autoApply: true,
    locale: {
      format: dateFormat,
      separator: separator
    },
    opens: $('html').attr('data-textdirection') === 'rtl' ? 'left' : 'right'
  };

  //
  if (rangePickr.length) {
    rangePickr.flatpickr({
      mode: 'range',
      dateFormat: 'm/d/Y',
      onClose: function (selectedDates, dateStr, instance) {
        var startDate = '',
          endDate = new Date();
        if (selectedDates[0] != undefined) {
          startDate =
            selectedDates[0].getMonth() + 1 + '/' + selectedDates[0].getDate() + '/' + selectedDates[0].getFullYear();
          $('.start_date').val(startDate);
        }
        if (selectedDates[1] != undefined) {
          endDate =
            selectedDates[1].getMonth() + 1 + '/' + selectedDates[1].getDate() + '/' + selectedDates[1].getFullYear();
          $('.end_date').val(endDate);
        }
        $(rangePickr).trigger('change').trigger('keyup');
      }
    });
  }

  // Advance filter function
  // We pass the column location, the start date, and the end date
  var filterByDate = function (column, startDate, endDate) {
    // Custom filter syntax requires pushing the new filter to the global filter array
    $.fn.dataTableExt.afnFiltering.push(function (oSettings, aData, iDataIndex) {
      var rowDate = normalizeDate(aData[column]),
        start = normalizeDate(startDate),
        end = normalizeDate(endDate);

      // If our date from the row is between the start and end
      if (start <= rowDate && rowDate <= end) {
        return true;
      } else if (rowDate >= start && end === '' && start !== '') {
        return true;
      } else if (rowDate <= end && start === '' && end !== '') {
        return true;
      } else {
        return false;
      }
    });
  };

  // converts date strings to a Date object, then normalized into a YYYYMMMDD format (ex: 20131220). Makes comparing dates easier. ex: 20131220 > 20121220
  var normalizeDate = function (dateString) {
    var date = new Date(dateString);
    var normalized =
      date.getFullYear() + '' + ('0' + (date.getMonth() + 1)).slice(-2) + '' + ('0' + date.getDate()).slice(-2);
    return normalized;
  };
  // Advanced Search Functions Ends

  // Ajax Sourced Server-side
  // --------------------------------------------------------------------

  if (dt_ajax_table.length) {
    var dt_ajax = dt_ajax_table.dataTable({
      processing: true,
      dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      ajax: assetPath + 'data/ajax.php',
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
  }

  // Column Search
  // --------------------------------------------------------------------

  if (dt_filter_table.length) {
    // Setup - add a text input to each footer cell
    $('.dt-column-search thead tr').clone(true).appendTo('.dt-column-search thead');
    $('.dt-column-search thead tr:eq(1) th').each(function (i) {
      var title = $(this).text();
      $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

      $('input', this).on('keyup change', function () {
        if (dt_filter.column(i).search() !== this.value) {
          dt_filter.column(i).search(this.value).draw();
        }
      });
    });

    var dt_filter = dt_filter_table.DataTable({
      ajax: assetPath + 'rps/tabla',
       columns: [        
        { data: 'TIPO_DE_DOCUMENTO' },
        { data: 'NUMERO_DE_DOCUMENTO_DE_IDENTIDAD' },
        { data: 'PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO' },
        { data: 'SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO' },
        { data: 'PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO' },
        { data: 'SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO' },
        { data: 'FECHA_DE_NACIMIENTO' },
        { data: 'GRUPO_ETARIO' },
        { data: 'PERTENENCIA_ETNICA' },
        { data: 'Sexo' },
        { data: 'Grado_Educativo' },
        { data: 'dia_1' },
        { data: 'dia_2' },
        { data: 'dia_3' },
        { data: 'dia_4' },
        { data: 'dia_5' },
        { data: 'dia_6' },
        { data: 'dia_7' },
        { data: 'dia_8' },
        { data: 'dia_9' },
        { data: 'dia_10' },
        { data: 'dia_11' },
        { data: 'dia_12' },
        { data: 'dia_13' },
        { data: 'dia_14' },
        { data: 'dia_15' },
        { data: 'dia_16' },
        { data: 'dia_17' },
        { data: 'dia_18' },
        { data: 'dia_19' },
        { data: 'dia_20' },
        { data: 'dia_21' },
        { data: 'dia_22' },
        { data: 'dia_23' },
        { data: 'dia_24' },
        { data: 'dia_25' },
        { data: 'dia_26' },
        { data: 'dia_27' },
        { data: 'dia_28' },
        { data: 'dia_29' },
        { data: 'dia_30' },
        { data: 'dia_31' },
        { data: 'MODALIDAD' },
        { data: 'NO_CLASES' },
        { data: 'NOVEDADES' },
        { data: 'TOTAL_DIAS_NO_CONSUMO' },
        { data: 'SEDE' },
        { data: 'INSTITUCION' },
        { data: 'CODIGO_DANE' }

      ],
      dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      orderCellsTop: true,
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
  }

  // Advanced Search
  // --------------------------------------------------------------------

  // Filter form control to default size for all tables
  $('.dataTables_filter .form-control').removeClass('form-control-sm');
  $('.dataTables_length .form-select').removeClass('form-select-sm').removeClass('form-control-sm');
});

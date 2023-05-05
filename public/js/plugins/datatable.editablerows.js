/**
 *
 * EditableRows
 *
 * Interface.Plugins.Datatables.EditableRows page content scripts. Initialized from scripts.js file.
 *
 *
 */

class EditableRows {
    constructor() {
        if (!jQuery().DataTable) {
            console.log('DataTable is null!');
            return;
        }

        // Selected single row which will be edited
        this._rowToEdit;

        // Datatable instance
        this._datatable;

        // Edit or add state of the modal
        this._currentState;

        // Controls and select helper
        this._datatableExtend;

        // Add or edit modal
        this._addEditModal;

        // Datatable single item height
        this._staticHeight = 62;

        this._createInstance();
    }

    // Creating datatable instance
    _createInstance() {
        const _this = this;
        this._datatable = jQuery('#datatableRows').DataTable({
            scrollX: true,
            info: false,
            order: [], // Clearing default order
            sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>', // Hiding all other dom elements except table and pagination
            pageLength: 25,
            columns: [{ data: 'No' }, { data: 'Name' }, { data: 'Flag' }, { data: 'CCa2' }, { data: 'CCa3' }, { data: 'Native Name' }, { data: 'Alternative Name' }, { data: 'CCC' }],
            language: {
                paginate: {
                    Back: '<i class="cs-chevron-left"></i>',
                    next: '<i class="cs-chevron-right"></i>',
                },
            },
            columnDefs: [
                // Adding Name content as an anchor with a target #
                {
                    targets: 1,
                    render: function(data, type, row, meta) {
                        return '<a class="list-item-heading body">' + data + '</a>';
                        // return '<a class="list-item-heading body" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">' + data + '</a>';
                    },

                    targets: 6,
                    render: function(data, type, row, meta) {
                        // return '<a class="list-item-heading body" href="#">' + data + '</a>';
                        return '<td class="col-2">' + data + '</td>';
                    },
                },
                // // Adding Tag content as a span with a badge class
                // {
                //   targets: 4,
                //   render: function (data, type, row, meta) {
                //     return '<span class="badge bg-outline-primary">' + data + '</span>';
                //   },
                // },
                // // Adding checkbox for Check column
                // {
                //   targets: 5,
                //   render: function (data, type, row, meta) {
                //     return '<div class="form-check float-end mt-1"><input type="checkbox" class="form-check-input"></div>';
                //   },
                // },
            ],

        });
    }
}
// datepicker UI
$(document).ready(function () {
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap', format: 'yyyy-mm-dd' 
    });
});

new Vue({
    el: '.container',
    data: {
        jadwal: {
            '1': {
                'lapangan': '1',
                'label': 'A',
                'urutan': [ {'nomor':'1'}, {'nomor':'2'},
                            {'nomor':'3'}, {'nomor':'4'},
                            {'nomor':'5'}, {'nomor':'6'},
                            {'nomor':'7'}, {'nomor':'8'},
                            {'nomor':'9'}, {'nomor':'10'},
                            {'nomor':'11'}, {'nomor':'12'},
                            {'nomor':'13'}, {'nomor':'14'},
                            {'nomor':'15'}, {'nomor':'16'} ]
            },
            '2': {
                'lapangan': '2',
                'label': 'B',
                'urutan': [ {'nomor':'1'}, {'nomor':'2'},
                            {'nomor':'3'}, {'nomor':'4'},
                            {'nomor':'5'}, {'nomor':'6'},
                            {'nomor':'7'}, {'nomor':'8'},
                            {'nomor':'9'}, {'nomor':'10'},
                            {'nomor':'11'}, {'nomor':'12'},
                            {'nomor':'13'}, {'nomor':'14'},
                            {'nomor':'15'}, {'nomor':'16'} ]
            },
            '3': {
                'lapangan': '3',
                'label': 'C',
                'urutan': [ {'nomor':'1'}, {'nomor':'2'},
                            {'nomor':'3'}, {'nomor':'4'},
                            {'nomor':'5'}, {'nomor':'6'},
                            {'nomor':'7'}, {'nomor':'8'},
                            {'nomor':'9'}, {'nomor':'10'},
                            {'nomor':'11'}, {'nomor':'12'},
                            {'nomor':'13'}, {'nomor':'14'},
                            {'nomor':'15'}, {'nomor':'16'} ]
            },
        }
    },
    methods: {
        pilihJadwal(lapangan, jam) {
            //cara mendapatkan nilai dari datepicker
            var date = $('#datepicker').datepicker().value();
            alert('Anda memilih lapangan : ' + lapangan + jam + '\nPada ' + date);
        }
    }
})

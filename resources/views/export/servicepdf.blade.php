<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
  table {
    border-spacing: 0;
    width: 100%;
  }
  th {
    background: #404853;
    background: linear-gradient(#687587, #404853);
    border-left: 1px solid rgba(0, 0, 0, 0.2);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 8px;
    text-align: left;
    text-transform: uppercase;
  }
  th:first-child {
    border-top-left-radius: 4px;
    border-left: 0;
  }
  th:last-child {
    border-top-right-radius: 4px;
    border-right: 0;
  }
  td {
    border-right: 1px solid #c6c9cc;
    border-bottom: 1px solid #c6c9cc;
    padding: 8px;
  }
  td:first-child {
    border-left: 1px solid #c6c9cc;
  }
  tr:first-child td {
    border-top: 0;
  }
  tr:nth-child(even) td {
    background: #e8eae9;
  }
  tr:last-child td:first-child {
    border-bottom-left-radius: 4px;
  }
  tr:last-child td:last-child {
    border-bottom-right-radius: 4px;
  }
  img {
   width: 40px;
   height: 40px;
   border-radius: 100%;
 }
 .center {
   text-align: center;
 }
</style>
<link rel="stylesheet" href="">
<title>Laporan Data Service</title>
</head>
<body>
  <h1 class="center">LAPORAN DATA SERVICE</h1>
  <table id="pseudo-demo">
    <thead>
      <tr>
        <th>No</th>
        <th>No Kendaraan</th>
        <th>Nama Petugas</th>
        <th>Merek</th>
        <th>Jenis</th>
        <th>tgl Service</th>
        <th>Kategori</th>
        <th>Status</th>

      </tr>
    </thead>
    <tbody>
     <?php $no = 0;?>
     @foreach($service as $service)
     <?php $no++ ;?>
     <tr>

       <td>{{$no}}</td>
       <td>{{$service->no_kendaraan}}</td>
       <td>{{$service->petugas->nama_petugas}}</td>
       <td>{{$service->merek}}</td>
       <td>{{$service->jenis}}</td>
       <td>{{date('d F y' ,strtotime($service->created_at))}}</td>
       <td>{{$service->kategori_service}}</td>
       <td>{{$service->status}}</td>

     </tr>
     @endforeach

   </tbody>
 </table>
</body>
</html>


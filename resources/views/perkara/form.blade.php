<div class="card-body">
    <div class="form-group">
        <label>Perkara</label>
        <input type="text" name="judul_perkara" class="form-control" value="{{ old('judul_perkara', $perkara->judul_perkara ?? '') }}" required>
    </div>
    <div class="form-group">
        <label>Client</label>
        <select name="client_id" class="form-control" required>
            <option value="">-- Pilih Client --</option>
            @foreach ($clients as $client)
                <option value="{{ $client->id }}" {{ old('client_id', $perkara->client_id ?? '') == $client->id ? 'selected' : '' }}>
                    {{ $client->nama_client }} ({{ $client->jenis_client ?? 'Pribadi' }})
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Jenis Perkara</label>
        <select name="jenis_perkara_id" class="form-control">
            <option value="">-- Pilih Jenis Perkara --</option>
            @foreach ($jenisPerkara as $jenis)
                <option value="{{ $jenis->id }}" {{ old('jenis_perkara_id', $perkara->jenis_perkara_id ?? '') == $jenis->id ? 'selected' : '' }}>
                    {{ $jenis->nama_jenis_perkara }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Uraian Perkara</label>
        <textarea name="uraian_perkara" class="form-control" rows="4" required>{{ old('uraian_perkara', $perkara->uraian_perkara ?? '') }}</textarea>
    </div>
    <div class="form-group">
        <label>Nomor Perkara Internal</label>
        <input type="text" name="no_perkara_internal" class="form-control" value="{{ old('no_perkara_internal', $perkara->no_perkara_internal ?? '') }}" required>
    </div>
    <div class="form-group">
        <label>Nomor Perkara Pengadilan/Kepolisian (External)</label>
        <input type="text" name="nomor_perkara_external" class="form-control" value="{{ old('nomor_perkara_external', $perkara->nomor_perkara_external ?? '') }}">
    </div>
    <div class="form-group">
        <label>No Perkara PN (opsional)</label>
        <input type="text" name="no_perkara_pn" class="form-control" value="{{ old('no_perkara_pn', $perkara->no_perkara_pn ?? '') }}">
    </div>
    <div class="form-group">
        <label>Status Perkara</label>
        <input type="text" name="status_perkara" class="form-control" value="{{ old('status_perkara', $perkara->status_perkara ?? 'Proses') }}" required>
    </div>
    <div class="form-group">
        <label>Penanggung Jawab Perkara</label>
        <input type="text" name="penanggung_jawab_perkara" class="form-control" value="{{ old('penanggung_jawab_perkara', $perkara->penanggung_jawab_perkara ?? '') }}" required>
    </div>
    <div class="form-group">
        <label>File Perkara (pdf/jpg/png/doc/docx)</label>
        <input type="file" name="file_perkara" class="form-control-file">
        @if (!empty($perkara->file_perkara) && $perkara->file_perkara !== '-')
            <small class="text-muted d-block mt-2">File saat ini: {{ $perkara->file_perkara }}</small>
        @endif
    </div>
</div>

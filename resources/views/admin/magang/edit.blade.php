<label>Ruangan</label>
<select name="ruangan" class="w-full border p-2 rounded">
    <option value="">Pilih Ruangan</option>
    <option value="A" {{ $magang->ruangan == 'A' ? 'selected' : '' }}>A</option>
    <option value="B" {{ $magang->ruangan == 'B' ? 'selected' : '' }}>B</option>
</select>

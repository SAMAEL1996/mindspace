<div>
    <div class="row">
        <div class="col-lg-3">
            <form wire:submit.prevent="save">
                <div class="form-group mb-3">
                    <label for="client">Customer name</label>
                    <input type="text" wire:model="client" id="client" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="pass">Pass</label>
                    <select wire:model="itemId" id="pass" class="form-control">
                        <option value="">Custom</option>
                        @foreach($passes as $pass)
                            <option value="{{ $pass->id }}">{{ $pass->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="time">Time In</label>
                    <input type="time" class="form-control" id="time" wire:model="timeIn" required>
                    @error('timeIn') <span>{{ $message }}</span> @enderror
                </div>
            
                <button type="submit" class="btn btn-primary form-control mb-3">Save</button>
            </form>
        </div>
        <div class="col-lg-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Pass</th>
                        <th>Time In</th>
                        <th>Stay</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $customer)
                        <tr>
                            <td>
                                {{ $customer->client ? $customer->client : '-' }}
                            </td>
                            <td>
                                {{ $customer->item ? $customer->item->name : 'Custom' }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($customer->time_in)->format('h:i a') }}
                            </td>
                            <td>
                                <span wire:model="stay">
                                    {{ \Carbon\Carbon::parse($customer->time_in)->diffForHumans() }}
                                </span>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts_after')
<script>
    setInterval(function () {
        @this.set('currentTime', '{{ now() }}');
    }, 60000); // Refresh every minute (60000 milliseconds)
</script>
@endpush
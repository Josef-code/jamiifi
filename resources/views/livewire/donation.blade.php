<div>
    <!-- Payment Form Section -->
    <form class="mb-4" wire:submit="createApiUser">
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone Number:</label>
            <input type="tel" id="phone" wire:model="phone" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter your phone number" required>
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-gray-700 text-sm font-semibold mb-2">Amount to Pay:</label>
            <input type="number" id="amount" wire:model="amount" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter the amount to pay" required>
        </div>

        <button type="submit" class="bg-[#035939] text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">Pay with MoMo Pay</button>
        <div wire:loading>
            <span class="text-red font-bold">Loading...</span>
        </div>
    </form>
</div>
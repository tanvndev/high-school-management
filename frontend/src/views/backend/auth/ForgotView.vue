<template>
  <main class="flex h-screen w-full flex-col items-center justify-center px-4">
    <div class="w-full max-w-sm space-y-5 text-gray-600">
      <div class="pb-8 text-center">
        <img src="https://floatui.com/logo.svg" width="150" class="mx-auto" />
        <div class="mt-5">
          <h3 class="text-2xl font-bold text-gray-800 sm:text-3xl">Lấy lại mật khẩu của bạn</h3>
        </div>
      </div>
      <form @submit.prevent="onSubmit">
        <AleartError :errors="errors" />
        <div class="mb-5">
          <InputComponent label="Địa chỉ email" name="email" type="text" />
        </div>
        <a-button
          :loading="loading"
          type="primary"
          size="large"
          html-type="submit"
          class="mt-4 w-full"
        >
          Đăng ký ngay
        </a-button>
      </form>
      <p class="text-center">
        Bạn muốn đăng nhập tài khoản?
        <RouterLink :to="{ name: 'login' }" class="font-medium text-blue-600 hover:text-blue-500"
          >Đăng nhập</RouterLink
        >
      </p>
    </div>
  </main>
</template>
<script setup>
import { InputComponent, AleartError } from '@/components/backend';
import { useForm } from 'vee-validate';
import * as yup from 'yup';
import { ref } from 'vue';
import { RouterLink } from 'vue-router';
import router from '@/router';
import { formatMessages } from '@/utils/format';
import { AuthService } from '@/services';
import { useAntToast } from '@/utils/antToast';

const { showMessage } = useAntToast();
const loading = ref(false);
const errors = ref({});
const { handleSubmit } = useForm({
  validationSchema: yup.object({
    email: yup
      .string()
      .email('Email không đúng định dạng email.')
      .required('Email không được để trống.')
  })
});

const onSubmit = handleSubmit(async (values) => {
  errors.value = {};
  loading.value = true;
  const response = await AuthService.forgot(values);
  if (!response.success) {
    loading.value = false;
    return (errors.value = formatMessages(response.messages));
  }
  loading.value = false;
  showMessage('success', response.messages);
  router.push({ name: 'login' });
});
</script>

import { reactive } from 'vue';
import { useVuelidate } from '@vuelidate/core';
import { required } from '@vuelidate/validators';

const INITIAL_STATE = {
  name: '',
  appeal: '',
};

const useForm = () => {
  const rules = {
    name: { required },
    appeal: { required, },
  };
  const state = reactive({
    ...INITIAL_STATE,
  });
  const v$ = useVuelidate(rules, state);
  const clearForm = () => {
    state.name = '';
    state.appeal = '';
  };
  return { state, v$, clearForm };
};

export default useForm;

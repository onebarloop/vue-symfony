import { ref } from 'vue';

export function useFetch(url: string, delay: boolean = false) {
  const data = ref(null);
  const error = ref(null);

  if (delay) {
    setTimeout(() => {
      fetch(url)
        .then((res) => res.json())
        .then((json) => (data.value = json))
        .catch((err) => (error.value = err));
    }, 2000);
  } else {
    fetch(url)
      .then((res) => res.json())
      .then((json) => (data.value = json))
      .catch((err) => (error.value = err));
  }

  return { data, error };
}

import styles from '@/styles/components/hum.module.scss'
import { HumCont } from '@/components';

const Hum = ({humOpen, clickHumOpen, clickHumClose}) => {
  return (
    <>
      <button
        className={`${styles.humBtn} ${humOpen ? styles.open : ''}`}
        onClick={clickHumOpen}
      >
        <span></span>
        <span></span>
      </button>

      <HumCont humOpen={humOpen} clickHumClose={clickHumClose} />
    </>
  );
}

export default Hum;
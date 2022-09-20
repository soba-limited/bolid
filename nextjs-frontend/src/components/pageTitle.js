import styles from '@/styles/components/pageTitle.module.scss'

const PageTitle = ({title}) => {
  return (
    <h2 className={styles.pageTitle}>{title}</h2>
  );
}

export default PageTitle;
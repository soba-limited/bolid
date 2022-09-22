import styles from '@/styles/components/pageTitle.module.scss'

const PageTitle = ({title, ivy = false}) => {
  return (
    <h2 className={`${styles.pageTitle} ${ivy ? 'ivy' : ''}`}>{title}</h2>
  );
}

export default PageTitle;